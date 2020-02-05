var path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");

module.exports = env => {
    
    console.log(env)
    
    config = {
        entry:{
          
          scripts: ['./js/src/main.js'],
          style: ["./css/scss/style.scss"]
        },
        output: {
            filename: '[name].min.js',
            path: path.resolve(__dirname, "js/dist")
        },
   
        module: {
            rules: [
              // Extracts the compiled CSS from the SASS files defined in the entry
              {
                test: /\.scss$/,
                use: [
                  {
                    loader: MiniCssExtractPlugin.loader
                  },
                  {
                    // Interprets CSS
                    loader: "css-loader",
                    options: {
                      importLoaders: 1,
                      sourceMap: true
                    }
                  },
                  {
                    loader: 'sass-loader'
                  }
                ]
              },
              {
                test: /\.(png|svg|jpg|gif|otf)$/,
                loader: 'file-loader',
                options: {
                  name: '[path][name].[ext]',
                },
                
              },
            ],
          },
          plugins: [
            // extract css into dedicated file
            new FixStyleOnlyEntriesPlugin(),
            new MiniCssExtractPlugin({
              filename: '../../[name].css'
            })
          ],
    };

    if(env.dev == true ){
      config.devtool  = 'eval-source-map';
    }
  
    return config;
    
  }
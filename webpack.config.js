/* global require */
/* global process */

let path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const WebpackBar = require('webpackbar');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

module.exports = {
    context: path.resolve(__dirname),
    devtool: 'source-map',
    optimization: {
        splitChunks: {
            chunks: 'async',
            minSize: 30000,
            maxSize: 0,
            minChunks: 1,
            maxAsyncRequests: 5,
            maxInitialRequests: 3,
            automaticNameDelimiter: '~',
            name: true,
            cacheGroups: {
                vendors: {
                    test: /[\\/]node_modules[\\/]/,
                    priority: -10
                },
                default: {
                    minChunks: 2,
                    priority: -20,
                    reuseExistingChunk: true
                }
            }
        }
    },
    entry: {
        app: [
            './src/js/app.js'
        ],
        styles: [
            './src/scss/styles.scss',
        ],
    },
    resolve: {
        alias: {
            vue: process.env.npm_lifecycle_event === 'production' ? 'vue/dist/vue.min.js' : 'vue/dist/vue.js'
        }
    },
    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: '[name].min.js'
    },
    module: {
        rules: [
            {
                test: /\.s(c|a)ss$/,
                use: [
                    'vue-style-loader',
                    'css-loader',
                    {
                        loader: 'sass-loader',
                        options: {
                            implementation: require('sass'),
                            sassOptions: {
                                fiber: require('fibers')
                            },
                        },
                    },
                ]
            },
          {
            test: /\.css$/i,
            use: ['style-loader', 'css-loader'],
          },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: '../font/'
                    }
                }]
            },
            {
                test: /\.(png|jpg|gif|jpeg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: '[name].[ext]',
                        outputPath: '../img/'
                    }
                }]
            },
            {
                test: /\.(js|vue)$/,
                exclude: /node_modules/,
                loader: "eslint-loader"
            }
        ]
    },
    plugins: [
        new VueLoaderPlugin(),
        new WebpackBar(),
        new VuetifyLoaderPlugin()
    ]
};

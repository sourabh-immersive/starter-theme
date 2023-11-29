const path = require('path');

const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');

const CopyWebpackPlugin = require('copy-webpack-plugin');

const ImageminPlugin = require('imagemin-webpack-plugin').default;

const LiveReloadPlugin = require('webpack-livereload-plugin');

// const BrowserSyncPlugin = require('browser-sync-webpack-plugin')




const config = {

    entry: './src/js/main.js',

    output: {

        filename: '[name].min.js',

        path: path.join(__dirname, 'assets/dist/js'),

    },

    resolve: {

        modules: [path.resolve('./src'), path.resolve('./node_modules')],

    },

    module: {

        rules: [

            {

                test: /\.(js|mjs)$/,

                exclude: /node_modules/,

                use: ['babel-loader'],

            },

            {

                test: /\.scss$/,

                use: [

                    MiniCssExtractPlugin.loader,

                    {

                        loader: 'css-loader',

                        options: {

                            url: false,

                        },

                    },

                    'postcss-loader',

                    'sass-loader',

                ],

            },

        ],

    },

    plugins: [

        new LiveReloadPlugin({

            host: 'http://opendevstarter.local',

            port: 5757,

        }),

        new MiniCssExtractPlugin({

            filename: '../css/main.css',

        }),

        // new CopyWebpackPlugin({

        //     patterns: [

        //         { from: './src/img', to: './assets' },
        //         { from: './src/img', to: './assets' },
        //     ],

        // }),

        new ImageminPlugin({

            pngquant: {

                quality: '95-100',

            },

        }),

        // new BrowserSyncPlugin(

        //     // BrowserSync options

        //     {

        //         // browse to http://localhost:3000/ during development

        //         host: 'http://opendevstarter.local',

        //         port: 3000,

        //         // proxy the Webpack Dev Server endpoint

        //         // (which should be serving on http://localhost:3100/)

        //         // through BrowserSync

        //         proxy: 'http://opendevstarter.local',

        //         files: [

        //             {

        //                 match: [

        //                     '**/*.php'

        //                 ],

        //                 fn: function (event, file) {

        //                     if (event === "change") {

        //                         const bs = require('browser-sync').get('bs-webpack-plugin');

        //                         bs.reload();

        //                     }

        //                 }

        //             }

        //         ]

        //     },

        //     // plugin options

        //     {

        //         // prevent BrowserSync from reloading the page

        //         // and let Webpack Dev Server take care of this

        //         reload: true,

        //         injectCss: true

        //     }

        // )

    ],

    optimization: {

        minimizer: [

            new UglifyJsPlugin({

                cache: true,

                parallel: true,

                sourceMap: true,

            }),

            new OptimizeCSSAssetsPlugin(),

        ],

        splitChunks: {

            chunks: 'all',

            name: 'vendor',

        },

    },

};




module.exports = config;
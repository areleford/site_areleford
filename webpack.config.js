const path = require("path");
const webpack = require("webpack");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
    context: path.resolve(__dirname, "src"),
    entry: {
        app: [
            "./js/app.js",
            "./scss/style.scss"
        ]
    },

    output: {
        path: path.resolve(__dirname, "./dist"),
        filename: "[name].js"
    },

    module: {
        rules: [
            // Styles
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: ["css-loader", "postcss-loader", "sass-loader"]
                }),
            },
            // Javascript
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader",
                options: {
                    presets: ["es2015"]
                }
            },
            // IMAGES
			{
				test: /\.(png|jpe?g|JPE?G|gif|svg)$/,
                include: [
                    path.resolve(__dirname, "src/img")
                ],
				loader: "file-loader",
                options: {
                    name: "./img/[name].[ext]"
                }
			},
            // FONTS
            {
                test: /\.(svg|eot|ttf|woff|woff2)$/,
                include: [
                    path.resolve(__dirname, "src/fonts")   
                ],
                loader: "file-loader",
                options: {
                    name: "./fonts/[name].[ext]"
                }
            }
        ]
    },

    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        }),
        new ExtractTextPlugin("/style.css"),
        new BrowserSyncPlugin({
		    proxy: 'localhost:8080/areleford',
		    port: 3000,
		    files: [
		        '**/*.php'
		    ],
		    ghostMode: {
		        clicks: false,
		        location: false,
		        forms: false,
		        scroll: false
		    },
		    injectChanges: true,
		    logFileChanges: true,
		    logLevel: 'debug',
		    logPrefix: 'wepback',
		    notify: true,
		    reloadDelay: 0
		}),
    ]
};
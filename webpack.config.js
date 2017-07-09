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
				test: /\.(png|jpe?g|gif|svg)$/,
                include: [
                    path.resolve(__dirname, "src/img"),
                    path.resolve(__dirname, "node_modules/semantic-ui-less")
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
                    path.resolve(__dirname, "src/fonts"),
                    path.resolve(__dirname, "node_modules/semantic-ui-less")   
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
		    proxy: 'localhost:8080/myTemplate',
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
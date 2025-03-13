const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
    entry: './assets/js/main.js', // Входная точка для JS
    output: {
        filename: 'bundle.js', // Имя выходного файла для объединенного JS
        path: path.resolve(__dirname, 'dist'), // Папка для выходных файлов
    },
    // devtool: 'eval-cheap-source-map',
    devtool: 'inline-source-map',
    // watch: true,
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader, 
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1,
                        },
                    },
                ],
            },
        ],
    },
    plugins: [
        new CleanWebpackPlugin(), // Очищает выходную папку перед каждой сборкой
        new MiniCssExtractPlugin({
            filename: 'styles.min.css', // Имя выходного CSS файла
        }),
    ],
    optimization: {
        minimize: true,
        minimizer: [
            `...`, // Стандартная минимизация JS
            new CssMinimizerPlugin(), // Минимизация CSS
        ],
    },
    // mode: 'production', // Установка режима на "production"
    watch: true, // Включение режима наблюдения
};
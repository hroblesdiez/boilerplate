
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const isProduction = process.env.NODE_ENV === 'production';
const stylesHandler = MiniCssExtractPlugin.loader;
const DIST = path.resolve( __dirname, 'dist' );
const entry = {
  index: './src/index.js',
  editor: './src/editor.js',
  map: './src/map.js',

};

const config  = {
  entry: entry,
  output: {
    path: DIST,
    filename: '[name].js',
    clean: true,
  },
  plugins: [
    new MiniCssExtractPlugin(),

  ],
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/i,
        loader: 'babel-loader',
      },
      {
        test: /\.(scss|css)$/i,
        use: [stylesHandler, 'css-loader', 'postcss-loader', 'sass-loader'],
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: 'asset',
      },
    ],
  },
};

module.exports = () => {
  if (isProduction) {
    config.mode = 'production';
  } else {
    config.mode = 'development';
  }
  return config;
};
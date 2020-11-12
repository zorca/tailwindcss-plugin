const Encore = require('@symfony/webpack-encore')
Encore
    .setOutputPath('build')
    .setPublicPath('build')
    .addStyleEntry('tailwindcss', './src/tailwindcss.css')
    // enable post css loader
    .enablePostCssLoader((options) => {
        options.config = {
            // directory where the postcss.config.js file is stored
            path: './postcss.config.js'
        };
    })
module.exports = Encore.getWebpackConfig()
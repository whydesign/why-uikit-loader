const path = require('path');

module.exports = [
    {
        entry: './src/bundle.js',
        module: {
            rules: [
                {
                    test: /\.css$/i,
                    use: ['style-loader', 'css-loader'],
                },
            ],
        },
        output: {
            filename: 'bundle.js',
            path: path.resolve(__dirname, 'dist'),
        }
    },
    {
        entry: './src/uikit-js.js',
        output: {
            filename: 'uikit-js.js',
            path: path.resolve(__dirname, 'dist'),
        }
    },
    {
        entry: './src/uikit-icons.js',
        output: {
            filename: 'uikit-icons.js',
            path: path.resolve(__dirname, 'dist'),
        }
    },
    {
        entry: './src/uikit-css.js',
        module: {
            rules: [
                {
                    test: /\.css$/i,
                    use: ['style-loader', 'css-loader'],
                },
            ],
        },
        output: {
            filename: 'uikit-css.js',
            path: path.resolve(__dirname, 'dist'),
        }
    }
];
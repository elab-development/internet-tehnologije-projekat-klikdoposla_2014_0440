const moongose = require('mongoose');
const config = require('config');
const db = config.get('mongoURI');

//calling database using async await

const connectDB = async () => {
    try {
        await moongose.connect('mongodb+srv://aleksandra:freiberg.12@cluster0.zszerfy.mongodb.net/?retryWrites=true&w=majority', {
            useNewUrlParser: true,
            useUnifiedTopology: true,
            useCreateIndex: true,
            useFindAndModify: false,
        });

        console.log('MongoDb Connected..');
    } catch (err) {
        console.error(err.message);
        //exit process with failure
        process.exit(1);
    }
};

module.exports = connectDB;

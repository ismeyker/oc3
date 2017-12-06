let href = process.argv[2];
if (href === void 0) throw new Error('Не передана ссылка на сайт! Пример: "gulp -mysite.ru". Тире обязательно!');
if (href[href.length - 1] === "/" ) href = href.substr(0, href.length -1);


var gulp          = require('gulp'),
	sass          = require('gulp-sass'),
	browserSync   = require('browser-sync'),
    concat        = require('gulp-concat'),
    uglify        = require('gulp-uglifyjs'),
    cssnano       = require('gulp-cssnano'),
    rename        = require('gulp-rename'),
    del           = require('del'),
    imagemin      = require('gulp-imagemin'),
    pngquant      = require('imagemin-pngquant'),
    cache         = require('gulp-cache'),
    autoprefixer = require('gulp-autoprefixer');


gulp.task('mytask', function() {
    console.log('Привет, я таск! Поздравляю, GULP OpenCart работает!');
});


gulp.task('browser-sync', function() {
    browserSync({
        proxy: "http://" + href.substr(1),
        port: 3000,
        open: href.substr(1),
        baseDir: './'
    });
});


gulp.task('sass', function(){
    return gulp.src('./theme/default/stylesheet/sass/**/*.scss')
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('./theme/default/stylesheet'))
        .pipe(browserSync.reload({stream: true}))
});


//Оптимизация и конкатенация сторонних css, которые не определяются при помощи адмники
gulp.task('css-libs', function() {
    return gulp.src([
        './libs/bootstrap/css/bootstrap-theme.min.css',
        './libs/font-awesome/css/font-awesome.min.css'
        ])
        .pipe(cssnano()) // Сжимаем
        .pipe(concat('libs.min.css'))
        .pipe(gulp.dest('./libs'));
});


//Оптимизация и конкатенация сторонних js, которые не определяются при помощи адмники
gulp.task('scripts', function() {
    return gulp.src([
        './libs/jquery/jquery-2.1.1.min.js',
        './libs/bootstrap/js/bootstrap.min.js'
        ])
        .pipe(concat('libs.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./libs'));
});


//Оптимизурем изображения шаблона
gulp.task('img', function() {
    return gulp.src('./theme/default/image/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('./theme/default/image'));
});


gulp.task('watch', ['browser-sync', 'sass'], function() {
    gulp.watch('./theme/default/stylesheet/sass/**/*.scss', ['sass']);
    gulp.watch('./theme/default/template/**/*.twig', browserSync.reload);
    gulp.watch('./javascript/**/*.js', browserSync.reload);
});


//Очистка кеша
gulp.task('clear', function () {
    return cache.clearAll();
})


gulp.task('default', ['watch']);
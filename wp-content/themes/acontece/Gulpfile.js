var gulp = require('gulp');
var gutil = require('gulp-util');
var uglify = require('gulp-uglify');
var compass = require('gulp-compass');
var minifyCSS = require('gulp-minify-css');
var imagemin = require('gulp-imagemin');
var watch = require('gulp-watch');

//minificando js
gulp.task('scripts', function(){
	return gulp  
		.src(['src/js/*.js'])
		.pipe(uglify())
		.pipe(gulp.dest('build/js'));
});

//COMPASS
gulp.task('compass', function(){
    gulp.src('./src/scss/*.scss')	
        .pipe(compass({
            css: 'src/css',
            sass: 'src/scss',
            image: 'src/img'
        }))
        .pipe(minifyCSS())
        .pipe(gulp.dest('build/css'));
});

//imageMin
gulp.task('imagemin', function(){ 
	gulp.src('src/img/*.png')
	    .pipe(imagemin())
	    .pipe(gulp.dest('build/img'));
});

//watch
gulp.task('watch', function(){


	//Scripts
	gulp.watch('src/js/**/*.js', function(event) {
        gutil.log('File '+event.path+' was '+event.type+', running tasks (Scripts)...');
        gulp.run('scripts');
    });

    //Compass
    gulp.watch('src/scss/*.scss', function(event) {
        gutil.log('File '+event.path+' was '+event.type+', running tasks (Compass)...');
        gulp.run('compass');
    });


	//imagemin
	gulp.watch('src/img/*.png', function(event){
		 gutil.log('File '+event.path+' was '+event.type+', running tasks (Compass)...');
        gulp.run('imagemin');
	});

});
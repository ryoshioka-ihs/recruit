var gulp     = require('gulp');
var htmlhint = require("gulp-htmlhint");

gulp.task('html', function(){
	gulp.src("./_site/**/*.html")
		.pipe(htmlhint())
		.pipe(htmlhint.reporter("htmlhint-stylish"))
});


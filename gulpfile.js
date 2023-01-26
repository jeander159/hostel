const gulp=require('gulp'),
		browserSync=require('browser-sync').create();
//tarea para refrescar el navegador

gulp.task('default',function(){
	browserSync.init({
			proxy:'http://localhost/hotel'
	})
});
gulp.watch('./js/*.js').on('change',browserSync.reload);
gulp.watch('./**/*.php').on('change',browserSync.reload);
module.exports = function( grunt )
{
	grunt.initConfig({
		uglify: 
		{
			dist: {
				options: {

				},
				files: {
					'vendor/lib/script.js' : 'vendor/script.js'
				}
			}
		},
		
		concat: 
		{
			options: {
				
			},
			dist: {
				src: [
					'vendor/lib/jquery.js',
					'vendor/lib/template.js',
					'vendor/lib/script.js',
				],
				dest: 'js/script.js'
			},
			dist: {
				src: [
					'css/vendor/bootstrap.css',
					'css/vendor/style.css'
				],
				dest: 'css/style.css'
			}
		},
		
		watch: {
			files: ['vendor/script.js','css/vendor/style.css'],
			tasks: ['uglify','concat']
		}
	});
	
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	
	grunt.registerTask('default', ['uglify','concat']);
};
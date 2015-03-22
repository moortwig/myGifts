module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		/*sass: {
			dist: {
				files: {
					// 'resources/css/style.css' : 'resources/sass/style.scss'
				}
			}
		},*/
		watch: {
			css: {
				files: '**/*.less',
				tasks: ['less']
			}
		},
		less: {
			development: {
				options: {
					paths: ["resources/css"]
				},
				files: {
					"resources/css/style.css": "resources/less/style.less"
				}
			},
			production: {
				options: {
					paths: ["resources/css"],
					/*plugins: [
						new (require('less-plugin-autoprefix'))({browsers: ["last 2 versions"]}),
						new (require('less-plugin-clean-css'))(cleanCssOptions)
					],*/
				modifyVars: {
					imgPath: '"resources/img"',
					bgColor: 'red'
				}
			},
			files: {
				"resources/css/style.css": "resources/less/style.less"
				}
			}
		}
	});
	// grunt.loadTasks('tasks');
	// grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.registerTask('dev',[/*'sass', */'watch', 'less']);
}
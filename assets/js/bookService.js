//menggunakan template.js modules
define(['./template.js'], function (template) {
	//link service berupa data JSON
	var apiUrlPath = 'http://localhost/belajar_pwa/service/';
	var apiUrlLatest = apiUrlPath + 'get_book';

	/**
	 * Menjalankan fetch method dari apiUrl dengan promise
	 * @return {JSON} mengembalikan response.json dan melemparkan ke template.js
	 */
	function loadMoreRequest() {
		fetch(apiUrlLatest)
		.then(function (response) {
			return response.json();
		}).then(function (data) {
			//console.log(data.book);
			//memberikan data array book ke appendBook pada template.js
			template.appendBook(data.book);
		});
	}

	//melempar method melalui return json, dan dipanggil dari app.js
	return{
		loadMoreRequest: loadMoreRequest
	};

});
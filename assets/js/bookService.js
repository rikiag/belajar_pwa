define(['./template.js'], function (template) {
	var apiUrlPath = 'http://localhost/belajar_pwa/service/';
	var apiUrlLatest = apiUrlPath + 'get_book';

	function loadMoreRequest() {
		fetch(apiUrlLatest)
		.then(function (response) {
			return response.json();
		}).then(function (data) {
			console.log(data.book);
			template.appendBook(data.book);
		});
	}

	return{
		loadMoreRequest: loadMoreRequest
	};

});
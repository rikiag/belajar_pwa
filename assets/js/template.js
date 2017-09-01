define([], function () {

	/**
	 * menerima objek buku dan mengolahnya
	 * @param  {array} books array book dari appenBook()
	 * @return {sting}       templating dan parsing data pada card buku
	 */
	function generateBookCard(books) {
		var template = document.querySelector('#book-card').innerHTML;
		template = template.replace('{{title}}', books.title);
		template = template.replace('{{year}}', books.year);
		template = template.replace('{{author}}', books.author);
		template = template.replace('{{publisher}}', books.publisher);
		return template;
	}

	/**
	 * mengambil data array dari bookService.js
	 * @param  {array} book data array book yang di dapat dari apiUrl
	 * @return {html}      mengembalikan tampilan card list buku pada halaman HTML
	 */
	function appendBook(book) {
		document.getElementById('first-load').innerHTML = "";
		var cardHTML = "";
		for (var i = 0; i < book.length; i++) {
			cardHTML += generateBookCard(book[i].value);
		}
		document.querySelector('.book-cards').insertAdjacentHTML('beforeend', cardHTML);
	}

	return{
		appendBook: appendBook
	};
});
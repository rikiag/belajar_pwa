define([], function () {
	function generateBookCard(books) {
		var template = document.querySelector('#book-card').innerHTML;
		template = template.replace('{{title}}', books.title);
		template = template.replace('{{year}}', books.year);
		template = template.replace('{{author}}', books.author);
		template = template.replace('{{publisher}}', books.publisher);
		return template;
	}

	function appendBook(book) {
		var cardHTML = "";
		for (var i = 0; i < book.length; i++) {
			cardHTML += generateBookCard(book[i].value);
		}
		document.querySelector('.book-cards').insertAdjacentHTML('beforeend', cardHTML);
		//$('.book-cards').innerHTML = cardHTML;
	}

	return{
		appendBook: appendBook
	};
});
const data = [];
// console.log(data);
fetch("/api/books/latest")
    .then((response) => response.json())
    .then((data) => {
        // console.log(data)
        data.forEach((element) => {
            const div = document.createElement('div');
            div.classList = 'card';

            const image = document.createElement('img')
            image.classList.add('card-img-top');
            const div2 = document.createElement('div');
            div2.classList.add('card-body');
            const h2 = document.createElement('h2');
            h2.classList.add('card-title');
            const p = document.createElement("p");
            p.classList.add('card-text');

            document.getElementById("latest-books").appendChild(div);
            document.getElementById("latest-books").appendChild(div2);
            document.getElementById("latest-books").appendChild(h2);
            document.getElementById("latest-books").appendChild(p);
            document.getElementById("latest-books").appendChild(image);

            h2.innerHTML = element.title;
            p.innerHTML = element.description;
            image.src = element.image;
        });
    })
    .catch((error) => console.log(error));
function openNav() {
  document.getElementById("sidenav").style.opacity = "1";
  document.getElementById("sidenav").style.zIndex = "1";
}

function closeNav() {
  document.getElementById("sidenav").style.opacity = "0";
  document.getElementById("sidenav").style.zIndex = "-1";
}

require(["node_modules/handlebars/dist/handlebars.js"], function (handlebars) {
  let cardsTemplate = document.getElementById("cards-template").innerHTML;
  cardsTemplate = handlebars.compile(cardsTemplate);
  const data = {
    cards: [
      {
        id: "amazonas",
        title: "Amazonas",
        subTitle1: "NIÑOS Perú",
        subTitle2: "Barcelona",
        description: "Tatuajes libres y fluidos",
        bannerImg: "images/home3.png",
        slides: ["images/home2.png", "images/amazonas4_slide.jpg"]
      },
      {
        id: "flowers",
        title: "Flowers",
        subTitle1: "PERÚ",
        subTitle2: "Y del mundo",
        description: "Inspiración flores textiles y años 50s",
        bannerImg: "images/home4.jpg",
        slides: ["images/home5.png", "images/flowers7_slide.jpg"]
      },
      {
        id: "tejidos",
        title: "Tejidos",
        subTitle1: "Juego de",
        subTitle2: "Y color",
        description: "Pata de gallo fusión escosés",
        bannerImg: "images/home7.png",
        slides: ["images/home6.jpg", "images/color3_slide.jpg"]
      },
      {
        id: "naturaleza",
        title: "Naturaleza",
        subTitle1: "Bondadosa",
        subTitle2: "Cuarentena",
        description: "Las ventanas se convirtieron en obras de arte",
        bannerImg: "images/home8.png",
        slides: ["images/home9.jpg", "images/naturaleza5_slide.jpg"]
      },
    ],
  };
  cardsTemplate = cardsTemplate(data);
  document.getElementById("container").innerHTML = cardsTemplate;

  
  function changePicture(cardName) {
    let i = 0;

    let image = typeof cardNumber === "number" && data.cards[cardNumber];
    document.querySelector(`#${cardName} .card-image`).style.backgroundImage =
      `url("${image.slides[i]}")`;

    if (i < image.slides.length - 1) {
      i++;
    } else {
      i = 0;
    }
    setTimeout(changePicture, 2000);
  }

  changePicture("amazonas");
  changePicture("flowers");
  changePicture("tejidos");
  changePicture("naturaleza");
});

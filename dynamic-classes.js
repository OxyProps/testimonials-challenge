const cards = document.querySelectorAll("[card_modifier]");

cards.forEach((card) => {
  const modifier = card.getAttribute("card_modifier");

  if (modifier.includes("wide")) {
    card.classList.add("o-span-2", "o-sm-span-1");
  }

  if (modifier.includes("tall")) {
    card.classList.add(
      "o-rspan-2",
      "o-lg-rspan-1",
      "o-lg-last",
      "o-lg-span-2",
      "o-sm-span-1"
    );
  }

  if (modifier.includes("invert")) {
    card.classList.add("o-invert", "c-testimonial-card--colored-avatar");
  }

  if (modifier.includes("gray")) {
    card.classList.add("c-testimonial-card--gray");
  }

  if (modifier.includes("featured")) {
    card.classList.add(
      "c-testimonial-card--featured",
      "c-testimonial-card--colored-avatar"
    );
  }
});

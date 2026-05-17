(function () {
  const filter = document.querySelector(".gallery-filter");
  const items = Array.from(document.querySelectorAll(".gallery-item"));

  if (filter && items.length) {
    filter.addEventListener("click", function (event) {
      const button = event.target.closest("button[data-filter]");
      if (!button) {
        return;
      }

      const value = button.dataset.filter;
      filter.querySelectorAll("button").forEach((item) => {
        item.classList.toggle("active", item === button);
      });

      items.forEach((item) => {
        item.hidden = value !== "all" && item.dataset.category !== value;
      });
    });
  }
})();

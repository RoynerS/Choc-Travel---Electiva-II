window.onload = function () {
  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    // El sistema tiene activado el modo oscuro
    document.documentElement.setAttribute("data-theme", "dark");
  } else {
    // El sistema tiene activado el modo claro
    document.documentElement.setAttribute("data-theme", "light");
  }
};

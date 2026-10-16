const box = document.getElementById("content");

document.querySelectorAll("[data-tag]").forEach((btn) => {
  btn.addEventListener("click", () => {
    const tag = btn.dataset.tag;
    const start = box.selectionStart,
      end = box.selectionEnd;
    const selected = box.value.slice(start, end);
    const open = "<" + tag + ">",
      close = "</" + tag + ">";
    box.value =
      box.value.slice(0, start) +
      open +
      selected +
      close +
      box.value.slice(end);
    const pos = selected
      ? start + open.length + selected.length + close.length
      : start + open.length;
    box.focus();
    box.setSelectionRange(pos, pos);
  });
});

document.getElementById("autoFormat").addEventListener("click", () => {
  const esc = (s) =>
    s.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
  box.value = box.value
    .split(/\r?\n/)
    .map((l) => l.trim())
    .filter(Boolean)
    .map((l) =>
      l.startsWith("# ")
        ? "<h2>" + esc(l.slice(2)) + "</h2>"
        : "<p>" + esc(l) + "</p>",
    )
    .join("\n\n");
});

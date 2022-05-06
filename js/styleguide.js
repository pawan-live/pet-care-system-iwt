let list = document.querySelectorAll(".class-snippet-copy");
let classCont = document.querySelectorAll(".class-container");
let tagCont = document.querySelectorAll(".tag-container");
// let snippetIndex;

list.forEach((list, index) => {
  list.addEventListener("click", () => {
    let snippetClass = classCont[index].childNodes[1].innerHTML;
    let snippetTag;
    if (tagCont[index].childElementCount == 1) {
      snippetTag = tagCont[index].children[0];
    } else if (tagCont[index].childElementCount > 1) {
      snippetTag = tagCont[index].children[1];
    }
    navigator.clipboard.writeText(snippetTag);
    console.log(snippetClass, snippetTag, "Copied!");
    // console.log(classCont[index]);
  });
});

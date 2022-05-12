function openTab(evt, tabName) {
  var i, tabContent, tabButtons;

  tabContent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }

  tabButtons = document.getElementsByClassName("tab-btn");
  for (i = 0; i < tabButtons.length; i++) {
    tabButtons[i].className = tabButtons[i].className.replace(
      "active-tab",
      "inactive-tab"
    );
  }

  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += "active-btn";
}

// openTab();

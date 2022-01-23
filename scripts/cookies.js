checkCookie() {
  let user = getCookie("username");
  if (user != "") {
      prompt('Cookie Set!')
  }

  else {
    prompt('Setting Cookie!')
    setCookie("username", 'guest', 7);
  }
}

setCookie() {
  document.cookie = "username=guest";
}

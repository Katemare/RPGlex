
function createRequestObject() {
  if (typeof XMLHttpRequest === 'undefined') {
    XMLHttpRequest = function() {
      try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); }
        catch(e) {}
      try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); }
        catch(e) {}
      try { return new ActiveXObject("Msxml2.XMLHTTP"); }
        catch(e) {}
      try { return new ActiveXObject("Microsoft.XMLHTTP"); }
        catch(e) {}
      throw new Error("This browser does not support XMLHttpRequest.");
    };
  }
  return new XMLHttpRequest();
}

function ajax(url) {
    var req = createRequestObject();
    req.open('GET', url, false);
    req.send(null);
    if (req.readyState == 4 && req.status == '200') {
        return req.responseText;
    }
    return '';
}

function get_comments(term_id, container_id) {    
    $('#'+container_id).html(ajax('/get_comments?term_id=' + term_id));
}

function add_comment(term_id, text) {
    ajax('/add_comment?term_id=' + term_id + '&text=' + text);
    get_comments(term_id, 'comments_container_'+term_id);
}


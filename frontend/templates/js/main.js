
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

function renew_comments(term, container) 
{
    var c = $('#' + container);
    c.html(ajax('/get_comments?term_id='+term));
    c.css('display', 'block');
    
}

function show_hide(container) {    
    var c = $('#' + container);
    if (c.css('display') == 'none') {
        c.css('display', 'block');
    } else {
        c.css('display', 'none');
    }
    
}

function show_hide_comments(term, container)
{
    var c = $('#' + container);
    if (c.css('display') == 'none') {
        renew_comments(term, container);
    } else {
        c.html('');
        c.css('display', 'none');
    }
}

function add_comment(term, text)  {
    ajax('add_comment?term_id=' + term + '&text=' + text);
    renew_comments(term, 'term_' + term + '_comments_container');
}

function renew_variants(term, container)
{   
    var c = $('#' + container);
    c.html(ajax('/variants?term_id='+term));
    c.css('display', 'block');
}

function show_hide_variants(term, container)
{   
    var c = $('#' + container);
    if (c.css('display') == 'none') {
        renew_variants(term, container);
    } else {
        c.html('');
        c.css('display', 'none');
    }
}

function add_variant(term, text)
{
    ajax('/add_variant?term_id=' + term + '&text=' + text);
    renew_variants(term, 'term_' + term + '_variants_container');
}


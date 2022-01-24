function search()
{
    alert('test');
    var search = document.getElementById("search").value;
    var table = document.getElementById("result");
    var rows = document.getElementsByClass("tr");
    var on = 0;
    for ( var i = 0; i < rows.length; i++ )
    {
      var td = rows[i].getElementsByTagName("td")[0];
          if (td)
          {
            txtValue = td.textContent || td.innerText;
            if (txtValue.indexOf(search) > -1)
            {
              tr[i].style.display = "";
            }
            else
            {
              tr[i].style.display = "none";
            }
    }
}


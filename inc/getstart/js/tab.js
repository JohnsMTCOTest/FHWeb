function vw_church_openCity(evt, cityName) {
    var vw_church_i, vw_church_tabcontent, vw_church_tablinks;
    vw_church_tabcontent = document.getElementsByClassName("tabcontent");
    for (vw_church_i = 0; vw_church_i < vw_church_tabcontent.length; vw_church_i++) {
        vw_church_tabcontent[vw_church_i].style.display = "none";
    }
    vw_church_tablinks = document.getElementsByClassName("tablinks");
    for (vw_church_i = 0; vw_church_i < vw_church_tablinks.length; vw_church_i++) {
        vw_church_tablinks[vw_church_i].className = vw_church_tablinks[vw_church_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
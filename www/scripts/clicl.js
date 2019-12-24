//<li class="list-group-item">Text</li>
function on_share() {
    var mind = document.getElementById("mind-field").value
    if (mind === '') return
    console.log(mind)

    node = document.getElementById('expandable-list');
    node.insertAdjacentHTML('beforebegin', '<li class=\'list-group-item\'>' + mind + '</li>');

}
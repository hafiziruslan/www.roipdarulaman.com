let endDateElm = '24 April 2023 8:00 am'
let countDownItem = document.querySelector('.countdown')
function countDown() {
    let endDate = new Date( endDateElm );
    let newDate = new Date();
    let dateDiff = ( endDate - newDate ) / 1000;
    if (dateDiff != null) {
        let day = Math.floor( dateDiff / 3600 / 24 );
        let hour = Math.floor( dateDiff / 3600 ) % 24;
        let min = Math.floor( dateDiff / 60 ) % 60;
        let sec = Math.floor( dateDiff % 60 );
        countDownItem.textContent = day + ' hari ' + ( '0' + hour ).slice( -2 ) + ' jam ' + ( '0' + min ).slice( -2 ) + ' minit ' + ( '0' + sec ).slice( -2 ) + ' saat';
    } else { clearInterval( stop ) }
}
let stop = setInterval(() => { countDown() }, 1000);
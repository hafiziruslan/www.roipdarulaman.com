let endDateElm = '23 March 2023 4:00 am'
let countDownItem = Array.from(document.querySelectorAll('.countdown'))
function countDown() {
    let endDate = new Date(endDateElm);
    let newDate = new Date();
    let dateDiff = (endDate - newDate) / 1000
    if (dateDiff > 0) {
        let day = Math.floor(dateDiff / 3600 / 24)
        let hour = Math.floor(dateDiff / 3600) % 24
        let min = Math.floor(dateDiff / 60) % 60
        let sec = Math.floor(dateDiff % 60)
        countDownItem[0].textContent = ('0' + day).slice(-2) + ' hari'
        countDownItem[1].textContent = ('0' + hour).slice(-2) + ' jam'
        countDownItem[2].textContent = ('0' + min).slice(-2) + ' minit'
        countDownItem[3].textContent = ('0' + sec).slice(-2) + ' saat'
    } else { clearInterval(stop) }
}
let stop = setInterval(() => { countDown() }, 1000);
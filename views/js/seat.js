const price = document.getElementById('price');
const totalSeat = document.getElementById('total-Seat');
const totalPrice = document.getElementById('total-price');
// const price = document.getElementById('price');



let seatList = {};
let seatPrice = 3;
let p = true;
const letter = document.querySelectorAll('#seat-movie');
letter.forEach(seat => {
    seat.addEventListener('click', (e) => {
        let total_seat = '';
        let count = 0;
        let index = e.target.dataset.index;
        let seatTarget = e.target;
        console.log(seatTarget);
        
        if (index !== undefined) 
        {
            seatList[index] = index;
            if (p)
            {
                selectSeat (seatTarget)
            }else
            {
                unSelectSeat (seatTarget)
                delete seatList[index]
            }
        }
        for (let key in seatList) 
        {
            count += 1
            total_seat += seatList[key] + ' ';
        };
        totalPrice.textContent = seatPrice * count            
        totalSeat.textContent = total_seat;
    })
});


function selectSeat (tt)
{
    tt.id = "chairChoose";
    p = false;
}
function unSelectSeat (tt)
{
    tt.id = "chair";
    p = true;
}
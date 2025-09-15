import Swal from 'sweetalert2';

export function showErrorSwal() {
    return Swal.fire({
        title: "Došlo je do greške!",
        text: "Molimo Vas prijavite problem našem timu putem kontakt forme ili pozivom na broj. Unapred zahvalna kancelarija Gotovac",
        icon: "error"
    });
}

export function showErrorSwalWithText(title,text) {
    return Swal.fire({
        title: title,
        text: text,
        icon: "error"
    });
}
export function showSuccessSwal(title, text) {
    return Swal.fire({
        title: title,
        text: text,
        icon: "success"
    });
}

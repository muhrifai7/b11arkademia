let Regex = /[^aeiou]*[aeiou]+(?:[^aeiou]*$|[^aeiou](?=[^aeiou]))?/gi;
//atur kata yang mengandung huruf vocal
function pecah(words) {
    return words.match(Regex);
    // cari kata
}

console.log(['programmermerit'].map(pecah))//buat array baru dengan map berdasarkan function pecah
class voucher{
	constructor(hargaAwal,kode,jarak,pajak){
		this.hargaAwal = hargaAwal,
		this.kode = kode,
		this.jarak = jarak,
		this.pajak = pajak	
	}
	getPajak(){
		if(this.pajak != false){
			return this.hargaAwal + (this.hargaAwal * 5/100)
		}else{
			return this.hargaAwal;
		}
	}
	getDiskon(){
		if( this.getPajak() > 50000 && this.kode == "ARKAFOOD5"){
			return this.getPajak() - (this.getPajak() * 50/100);
		}else if (this.getPajak() > 25000 && this.kode == "DITRAKTIRDEMY"){
			return this.getPajak() - (this.getPajak() * 60/100);
		}
	}
	getMax(){
		if(this.getDiskon() > 30000 && this.kode == "DITRAKTIRDEMY") {
			return 30000;
		}else if(this.getDiskon() > 50000 && this.kode == "ARKAFOOD5") {
			return 50000;
		}else{
			return this.getDiskon();
		}
	}
	getJarak(){
		if(this.jarak <= 1.5 ){
			return this.getMax() + 5000;
		}
		else{
			return `Rp : ${this.getMax() + (this.jarak * 2000 + 5000)}`
		}
	}
}
let rara = new voucher(90000,"ARKAFOOD5",2,false);
console.log(rara.getJarak());












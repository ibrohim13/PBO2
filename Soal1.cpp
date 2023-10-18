#include <iostream>
#include <cmath>

using namespace std;

class BangunDatar {
public:
    virtual void hitungLuas() = 0;
    virtual void hitungKeliling() = 0;
};

class Persegi : public BangunDatar {
private:
    double sisi;

public:
    Persegi(double s) : sisi(s) {}

    void hitungLuas() {
        cout << "Luas Persegi: " << sisi * sisi << endl;
    }

    void hitungKeliling() {
        cout << "Keliling Persegi: " << 4 * sisi << endl;
    }
};

class PersegiPanjang : public BangunDatar {
private:
    double panjang;
    double lebar;

public:
    PersegiPanjang(double p, double l) : panjang(p), lebar(l) {}

    void hitungLuas() {
        cout << "Luas Persegi Panjang: " << panjang * lebar << endl;
    }

    void hitungKeliling() {
        cout << "Keliling Persegi Panjang: " << 2 * (panjang + lebar) << endl;
    }
};

class Segitiga : public BangunDatar {
private:
    double alas;
    double tinggi;

public:
    Segitiga(double a, double t) : alas(a), tinggi(t) {}

    void hitungLuas() {
        cout << "Luas Segitiga: " << 0.5 * alas * tinggi << endl;
    }

    void hitungKeliling() {
        double sisiMiring = sqrt(alas * alas + tinggi * tinggi);
        cout << "Keliling Segitiga: " << (alas + tinggi + sisiMiring) << endl;
    }
};

class Lingkaran : public BangunDatar {
private:
    double jariJari;

public:
    Lingkaran(double r) : jariJari(r) {}

    void hitungLuas() {
        cout << "Luas Lingkaran: " << 3.14 * jariJari * jariJari << endl;
    }

    void hitungKeliling() {
        cout << "Keliling Lingkaran: " << 2 * 3.14 * jariJari << endl;
    }
};

int main() {
    Persegi persegi(5);
    persegi.hitungLuas();
    persegi.hitungKeliling();

    PersegiPanjang persegipanjang(8, 5);
    persegipanjang.hitungLuas();
    persegipanjang.hitungKeliling();

    Segitiga segitiga(10, 6);
    segitiga.hitungLuas();
    segitiga.hitungKeliling();

    Lingkaran lingkaran(7);
    lingkaran.hitungLuas();
    lingkaran.hitungKeliling();

    return 0;
}

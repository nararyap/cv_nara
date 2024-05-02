<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
        h2 {
            margin-top: 20px;
        }
        .section {
            margin-top: 20px;
        }
        .section h3 {
            margin-bottom: 5px;
        }
        .section p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        <?php include 'data.php'; ?>
        
        <div class="section">
            <h2>Data Diri</h2>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGRgaGhgaGhoaGhoYGhwYGhgaGhoYGBocIS4lHB4rIRoaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGBISGDQhGiExNDE0NDQxMTQxNDQ0NDQ0MTE0NDQ0NDQ0MTQ/NDE/NDQ0Pz8xND80PzQxNDQxNDExNP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAABAAIDBAUGBwj/xAA7EAACAQIEAwUGBQIGAwEAAAABAgADEQQSITEFQVEGYXGBkSIyobHB8AcTQlLRFGJykqKy4fEWQ8Ij/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAECAwT/xAAcEQEBAQEAAwEBAAAAAAAAAAAAAQIREiExQQP/2gAMAwEAAhEDEQA/APKkGgj/ACkdFtJYUTGumHUEvtrLbYQkXEhwvvbTfoJptEHNtSI5SMLrOkOFBmdicAVJtF0MzLGESy6W0MidJULSuRBaSWjCJXUgZqcGGjeI+szCJo8F/V5QKtRY4LCqSRREkwCPMOWOCxALQCOVIbRgLRwWKOCaRAgI6BFkqiMGrHGDaE3gAij7RpEAQ8I0rJ0osdgZco8HqNyt4xl1m5Ypt/8Ajr9R8YoDry6gNJZRZXwy6S2q6Sa34kwq+1N1L20mHTNtZrYaqLWMm05F3D0zvDk116Szh7EQFNSPD6yehn4jhwa9pi4vBMs6sLG16QYWtKlKuHZY0m038fwvmJiYiiVNiJcqKSYdmXMFJHX5y/wpLZgRv9Jp8CS9EeJ9dB9JK6WME01BHCOKxwWBG5YlEkAgyxA3LEBJCIgnQE/GALLeK0tUeH1GHsofSaNDs7UbewEODrEWSos6nD9mB+okzVw3AUXZZUheUcNTwzt7qky9R4LUblad5S4YBylpMGBH4ldOKodmr+8fSaeG7Pov6Z1K4cCOFMCPifJjUuGAbCXEwI6S9aKHB1V/pIZZijHXzRgxpLaiVcCND4y4omNdYAWMmpvaRWjwsR9beBxOk0Ve58v4nOYZ7TZw1a8VhL4EaywoY5hESB001nO8fogMlueb/wCZ0rDSYnG19pPFvmsqJq72ewjCgSVNs7a/5Y6vT9qd/wBkuHK2EXTdnP8ArI+kOK7MI75rWt00mnGXXA5IUoMdlPlPQ6PZumv6R56y5T4ci7ACHiXk88o8Hqvsth3zSw/ZZz7zW8BO8TCqOkmWkI/Erpx+H7KoN7nxmrh+Bouyj0m8BERHJC7WfT4eo5SwmFAk5hEYRrSAjwsdFBJWiiigCiMNoLQBQQwGAG0UbFBT5s4YLg/fKXsso8K2bx+k0lEy06uo2FjaK0mIiCxDpirLuGqEWldVkqCAbWHqXlwC4mJhalprUX+UXC6ey6TD40vuf4m+k28TVVVLMQAN5xfHeMfmEKmiqT7XMk6adI8zqdaevcL7SYbCYNDXqqhJeyD2nPtnZF157zk+M/i0xJXC0Qo/fVNz5IpsPMmeYsSTfcn4wEdfSbSMXRYjt1j3uTiHW/7QqgeFhtIaXbLGg3/qHY/3EMP8pFpz5MPKB8dnhfxGxiMDnV10uHRfPLltbnNmj+KdQK96epAKe0LKed78tiB1JnmV4bw4Xi9b4B+I71AqVgmc3FwLDNcWJubWtc91p23BeNrWS53DFc1rK1tmHT/ifONOqVIIJBG1p1XZ/te+HGV8zocxuDdgxNxoxtbeCbHvSvePE857OdvKbMKdQlczWViLKSdgdSFJ67HTa89Do1AwuIUkkUUUAUNoBDAFHCNtCDAAY0xxggAihigb5o4Yd5piZnDj73iJoqZlXSnUx5SQJLCnSJQRwGkIF44DSBUFNjLqYoKLmUWmfjsTbUnTpHnPUa1xHxPiD1mygnKNlHPvMo1sNkGZ+frB/XHZQB4DU63F/wCJXqVGY3Y3PfNpJGNtt9mHXXaRsY8tGWhVQBAY/LEVhw+mCER4SJEuYF02PElelbSa3D+E50zdxJ7umvlFaOWsuhvbr15909Y/DXtGWJw1Vrso9kn9SiwBueY0B7iD1nl9TBshPcbX7wbS2mKNOolanuoV1+TKfIkGP8RZx9GiGZnA+IrXpq4PIHXcgjRvP6GacREBHARAR0ABMaITBAFBHEQGACKKKAfM/DTv5TSyzP4Yt7+X1moqzK/XUbTWTCMAksSkiHaSSFdIK9cKhY8gYJqhxXGZPZG+syqeFd7M2x+9pBWq5mudf+5KtYsddB3TbM9MdVYyKq2W1zzPT+ZEaNlv990S1dfKwk1i/gPrLZs/JeSJRJ5S4KWvhLNGlbX1hw+qL0LKNDcwJQmjhzdSxtz+WnwhDj9I0A07zprDg6zmo6Sfh2DzOPM92kmSnmbuF/OaWED01LlNG902tcDofWLSszrNxOHH5hUa2t5Gy3v53nY8JwoFPQbqT66AGc9wTBGvWCjmczH4n4aek7MoERugJF/hMtVvjP65p8NmSobf+xvmPrOZqCwVf23HrrO6FPLR1Hvm/wBJxHEdGIG2b5D+TKyz/rHpn4ecSP5K3N8jGm/W26k+XPqvfPSBPFvw+xlqtWid6iBwf705W8CZ7FgHzIp7remkdYrYMaTCBEYAIQI2OAgAiaOtGtABaKG8UOB808KPtN5fWa9pjcNPtHwmrnmOnXIeI+9oxeUewiMTMfjOK0yL11PdyE1wZz/FnBew5aSs/Ub+KtGjfX785Zp4Y20W/fcWlUPyG3zmjhcRcBdh1t87TdhTf6UqOl5ZWnYC3d6xy5dSDc9Y1nUbkD4fZjhU/wDLUW7vn3yDEVb+yNuf8QM4I08tJKmHuCTYAanqe6HRIrAEjU6S3Tw19Omt4qFHO2UAnuAv/wBToaHZ+u4Hs5RvzuB3jwhdSHnNp/BuCCqbA2Ubt9B1O06LinCgVCLYKqgKo5n75zl6n9fQcUkYkM4yGysmU3ve40IsOc6FMa4qmlUKsyi+ZdmXrb9JHSY6t+ujPPiTs7wUIXe1idu8XJ+sl4jSKJl5k6fM3nQ8OplkvMLj9WzgdOUlSliwAgHRfv4/Kea48XY68zO04xVbIzA23HnOIrbjr/Ov34zTMY/1rZ7IVSuOo9+f/YTbztae58FW1NR4/AkfSeDdlTbGUCeRY+S02P0nvXBUK0UDb5RfxOv1jrFogQwCEwAQxkcIAjGx8aYwEUUUA+ZeHHU+AmkGmXgdz4TTCzHX11xKjSwZWWTAyVEROWxXvN4mdQxnN8RSznvsZeGe0NO0tUwP3eg18JTbSPRzymrGr6quh1+UloOgOiFj1P0lWijNrewva/PlLFBCXCobkHS+g8THaUnWlQog+2wsOg0v3Xk+G4a+JqBEFr6nmFXrDgMIzuQpZstgzcmc7Kgnp/Zrg60UGgztZmPyHgJF01zhJ2f7JUqKA5btbnqb9T3zVqYULtNfCm4tKWLTWTfi2FxDBo62ImfhuDoGzZQDzPjvbym86dY7DUwT4akyFyJKfspYDS04fiDqtao9ZgqIFNztZr7eek7t3A2nK8ew6momYAq/sMCNLj2lv6MPMRwVzXFuI4fFJ+XScLlN7MCpPkbTgqi3dh+02J8NP4nZ9ouDrQo1GpKqg2YgC5Fv2nkvdyuZw4f2SxGrX9es0jn339dL2Gwf52MReQDE+GW2vdrPfEQAADlPBOxWKai5qi21vI/9T2rgnFUxCBl32I6GHWdjUERMIiMZGR14LQwBXjWjgIDAG5u6KOtBDg6+YsBuZqp1mRgtzNZG0mWnVPSUGOveMIjiYldEmZ3EaAax8viZftGV1upjzeVOvcYVdDludwbH53k+Bw4sWPeP9N/rCW3B2O334SSg4A37x4gW+IM6I57T6RCpbrZhfw1HxjeHuFqgkX97zOU2t4m0jr1NAOQ1Hnr/ADKn5pBuNxY+Y2i0efVew9m+GBUUWuE0J/c5F3Y+tvWdlhksonNdj8clfDIyG7WOcc1cm7A+Z07jOpTaYc9unvVmg9oMSb6yJDFUvaUlQxL22j8NTJUC9r2J8TE1PrInRwPYe3iL+mshcXThgLgsPI3mFx/DEppuCCv+JdV+Ig/pzSLOatWox1sSCLcwqCwHlMmp2g/OGYIyIBc1Hsi+QJuT5QA49Uq0CeTpceDLPIGs7qq7aKP59TPRV4jkwdWpsFNXID/cxyD1YThuDYfM4PJR8eU0z8Y791v4ClkQLOl7McRNGqP2toR8jMBWtLCtYgjkRF1Ne0UXDAEbSWYfZ3FZ0A7hb0m3KjIDAsJjYwcYDDeKAMtFHxQHXy7gjrNRDymVg9zNKm0zrri0seZEGkgMkybeJhpaNYxwOkQkZmLoEG42+R5eUpp7wvoLi/dc6n4zdcX3l7szwFK9e7rdEFyORJ0A+ZmudM9fzYuM4Q6NlYHKRmV7EKVvvfly9Y5uzdU3svtC1xe9wdmFtxPa2wSOmVkUi1rEciLEekoJwdaaZV5Xt1A6X5/8ReRzMcZ2L7OYqi/5wcU9gVPtK4vqHHToRPUqTGwvvzmNgq1jlblNVG0k96r4sKYqlcKLkgDmZDmMbVwocWbUdOsZK1Pi9JifbW3XMOUT8Woj9aHwN5l8U4JTW5VVAN7iwtfu6Tnq3DVQEIqsDuGvmB7jfaOR1/z/AIzWex0OI4qga5Ps2I9ZiDCUanvorAE23HgdJz2J/NDhQvssQFUG5vtoT3y9i8b/AE1NmffkvVraL9YuMf75maz+2OIHsYWkABcM4Gw/aD53PkJUweGCAAc9T4zLwWKLuzufbY3J63+mgHlNpDKrl+pqclWQrJTJN33YipdQOk7OcX2Ep+wzd/0nZrLjLX0DGiOMAjITEYLwEwAxRt4oB8v4Y6mX6bShh95epSK6othpKpErJpJVMhR7GOBuI2rGu+VbwK+lbiNYqPZ3np3Y7hZo0Ez++/tvfqRovkNPWeTVa2a9/Dynednu3aKqpiFcFQB+YozA20uyjUHwvNPH0zm5a9HRYaiXlHhfG8PXA/KrI56Xs3mp1HpNBzIrTrKxmGG/MbGNw2KK6N68jL9VbzMxNIG+kQ+tinUDSwk5NMU9M9VHXe03MBxBXFwYxxYxK3FjOex/DidU9DN/EPfWZWNxYVW1sLamPq871n5XG4+nlOZjlyEG+9rG+nU905LieOfEVv8A9FKrsoPLvv1M3eI4o1GP7b6fzKYWOVjvV1e2qFPhlrDS3xHep+k0qFPKLfW+kcskWHUcOWT00LEBRcm3rIp2vYbhQYNVcdy+W5hBbx1HAcAKNJV52ufGacCiGWzpQXiMF4ERMbm1iMjgE14pHaGAfMOHbWX6ZlCjLiGTXTFoSRdDIla8kD25zNaZzprM3GYnNou33pBjMQG05Soe6a5x+1jvXfUGDNFmgv5zRid9Jr8P7TYqhYJWew/S5zr4Wa9vIiY2bxEOaLkVLY7vBfiO9gK1JW/uQlP9LXHxmtT7aYZxqzIejKT8VvPMN40rFcRc/pY9E4j2mo5T+W2ZuQsRr4kWnJYPjWIp1S4qgFyLqdV7rg6DxBmMxjMhJi8ZB52vT/8AypyNQl+oPPumZj+JvV0JsOg5zz4i0v4HFunet/dP0PKLxF1f10TGASDDYtX93fmDuJPIHT1MmWQU5Mh6wNKguQOtvjPX+DYb8ukidAJ5lwLAu7h1W4Ugnpeen4F2IGYWlZRqroMJjRDKQF4oDDeACNaOgaB020MVzDAny/h5bWVU0hZj3RePW3lItGraQvVLbyO/WK/TWVMyJ1q04pGKYlqR5UHbeWks3KAwDoYbwSV43KI4CArABl74rHqISYyChydTDfkIwxyjnEDQvOTLGCFdvv0gD0axBGhH3rNyjUBAImFeanCnupHQ/MXkan6eWihlnD0y7BQLltAPGVkH1nf9lezDIy1nIOl1A1353kRVrpeAcNFCkqAa7k9TzmoI0NCJbIYiYhFaCghivFAAY1jeFobwCOKSZRFAuPmEWjWTpGmJXtLh0g/JoGW2vKS6NIttDtyjBuaSU3kYOluY2hQwFiwwv9IlPrAhjmHMcoALxXgV4SYRIQMIjDaANtFCYhECAjohFaCgmnwc6N4iZoEv8KPtP4L8zJ18GfrXQz1HsRjDUwwUm5RinluvwI9J5Yk7/wDDonJV6Z1/2zOLvx2oMcpkQMeploSxRCEQBWgtHWgtBIQMI6IiARWgkn5cUA+Wzt99YDDFNFHU94a20UUAjTfyiWGKI6mWEbwxR/hI196OP36RRRQijjFFGRH7+Ma0UUSjkiMUUICl/hXvP4L82iik6+DP1qJt5md9+HHuVf8AEv8AtEUUziq7MR6xRSvxNTLHRRRkQjzFFAkcJiigdKKKKBP/2Q==" alt="">
            <p><strong>Nama:</strong> <?php echo $Data_Diri['nama']; ?></p>
            <p><strong>Usia:</strong> <?php echo $Data_Diri['usia']; ?></p>
            <p><strong>Phone:</strong> <?php echo $Data_Diri['phone']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $Data_Diri['alamat']; ?></p>
            <p><strong>Makanan Kesukaan:</strong> <?php echo $Data_Diri['makanan kesukaan']; ?></p>
            <p><strong>Idol:</strong> <?php echo $Data_Diri['husbu']; ?></p>
            <p><strong>Bias:</strong> <?php echo $Data_Diri['suami']; ?></p>
            <p><strong>Harapan:</strong> <?php echo $Data_Diri['harapan']; ?></p>
        </div>
        
        <div class="section">
            <h2>Pendidikan</h2>
            <?php foreach ($pendidikan as $edu): ?>
                <h3><?php echo $edu['Nama Sekolah']; ?></h3>
                <p><?php echo $edu['Tahun']; ?></p>
            <?php endforeach; ?>
        </div>
        
        <div class="section">
            <h2>Pengalaman</h2>
            <?php foreach ($pengalaman as $exp): ?>
                <h3><?php echo $exp['posisi']; ?></h3>
                <p><?php echo $exp['jabatan']; ?></p>
                <p><?php echo $exp['tahun']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
 
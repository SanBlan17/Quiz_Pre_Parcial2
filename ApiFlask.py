from flask import Flask, jsonify, request
import csv
import random
from faker import Faker



app = Flask(__name__)

@app.route("/generate_labels/<int:registros>", methods=['POST'])
def generar_datos(registros):
    faker = Faker()

    nombre_archivo = "e:/Ingenieria de Software 1/Quiz_Pre_Parcial2/SellosDiscograficos.csv"
    # Número de filas de datos aleatorios

    columnas = ["ID", "Nombre", "AñoFundacion", "Genero", "País"]

    with open(nombre_archivo, mode="w", newline="", encoding="utf-8") as archivo_csv:
        escritor = csv.writer(archivo_csv)
        escritor.writerow(columnas)  
        
        for i in range(1, registros + 1):
            fila = [
                i,  
                faker.name(),  
                random.randint(1950, 2025), 
                random.choice(["Pop", "Rock", "Hip Hop", "Reguetón", "Jazz", "Clásica"]),  # Edad aleatoria
                faker.country()  
            ]
            escritor.writerow(fila)
    return jsonify(f"Archivo {nombre_archivo} generado con {registros} filas de datos aleatorios.")
@app.route("/record_labels/", methods=['GET'])
def retornar_datos():
    nombre_archivo_csv = "e:/Ingenieria de Software 1/Quiz_Pre_Parcial2/SellosDiscograficos.csv"
    datos = []

    with open(nombre_archivo_csv, mode="r", encoding="utf-8") as archivo_csv:
        lector = csv.DictReader(archivo_csv)  
        for fila in lector:
            datos.append(fila)
    return jsonify(datos)


if __name__ =="__main__":
    app.run(debug=True)

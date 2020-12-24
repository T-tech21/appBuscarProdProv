﻿CREATE TABLE [dbo].[Cotizacion]
(
	[IdCliente] INT NULL , 
    [Sku] VARCHAR(MAX) NOT NULL PRIMARY KEY, 
    [CodigoAlterno] VARCHAR(MAX) NULL, 
    [Descripcion] VARCHAR(MAX) NULL, 
    [PrecioCosto] FLOAT NULL, 
    [Descuento] FLOAT NULL, 
    [PrecioFinal] FLOAT NULL
)
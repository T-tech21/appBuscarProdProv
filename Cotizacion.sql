CREATE TABLE [dbo].[Cotizacion]
(
	[IdCliente] VARCHAR(MAX) NULL , 
    [Sku] VARCHAR(MAX) NULL PRIMARY KEY, 
    [CodigoAlterno] VARCHAR(MAX) NULL, 
    [Descripcion] VARCHAR(MAX) NULL, 
    [PrecioCosto] FLOAT NULL, 
    [Descuento] INT NULL, 
    [PrecioFinal] FLOAT NULL
)
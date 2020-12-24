CREATE TABLE [dbo].[Productos]
(
	[CodigoAlterno] VARCHAR(MAX) NOT NULL PRIMARY KEY, 
    [Sku] VARCHAR(MAX) NULL, 
    [Descripcion] VARCHAR(MAX) NULL, 
    [Precio1] FLOAT NULL, 
    [Existencia] INT NULL, 
    [Nombre] VARCHAR(MAX) NULL, 
    [Tamaño] VARCHAR(MAX) NULL, 
    [PrecioLocal] FLOAT NULL
)

CREATE TABLE [dbo].[VentasPorDia]
(
	[Sku] VARCHAR(MAX) NOT NULL, 
    [Nombre] VARCHAR(MAX) NULL, 
    [Tama�o] VARCHAR(MAX) NULL, 
    [Descripcion] VARCHAR(MAX) NULL, 
    [Marca] VARCHAR(MAX) NULL, 
    [Proveedor] VARCHAR(MAX) NULL, 
    [Categoria] VARCHAR(MAX) NULL,
    [ClaveProdServ] VARCHAR(MAX) NULL,
[ClaveUnidad] INT NULL,
[Cantidad] INT NULL,
[Total] FLOAT NULL
)

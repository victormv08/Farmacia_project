
                            <table>
                                <thead>
                                    <tr>
                             
                                        
										<th>Nombre Producto</th>
										<th>Cantidad Producto</th>
										<th>Precio Producto</th>
										<th>Categoria</th>
										<th>Descripcion Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            
											<td>{{ $producto->nombre_producto }}</td>
											<td>{{ $producto->cantidad_producto }}</td>
											<td>{{ $producto->precio_producto }}</td>
											<td>{{ $producto->categorium->nombre_categoria }}</td>
											<td>{{ $producto->descripcion_producto }}</td>

                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


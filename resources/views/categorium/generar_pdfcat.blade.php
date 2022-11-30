
                            <table>
                                <thead >
                                    <tr>
                                      
                                        
										<th>Categoria</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorium as $categorium)
                                        <tr>
                                            
											<td>{{ $categorium->nombre_categoria }}</td>

                                            <td>
                        
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
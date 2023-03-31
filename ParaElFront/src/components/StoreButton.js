import React,{useState,useEffect} from "react";
import { Button } from "@mui/material";

export default function StoreButton(props){
    const storeStudent = () =>{
        alert("Guardar");
    }
    return(
        <div>
            <Button onClick={storeStudent} variant="outlined" color="primary">Store</Button>
        </div>
    );    
}
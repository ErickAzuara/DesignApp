import React,{useState,useEffect} from "react";
import { Button } from '@mui/material';

export default function UpdateButton(props){
    const updateStudent = () =>{
        alert("Actualizar");
    }
    return(
        <div>
            <Button onClick={props.handleClickOpen} variant="outlined" color="success">Update</Button>
        </div>
    );    
}
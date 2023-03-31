import React,{useState, useEffect} from 'react';
import Student from '../api/Student';
import constants from '../static/constants';
import StudentCRUD from '../components/StudentCRUD';
import { Grid } from '@mui/material';
import StoreButton from '../components/StoreButton';
export default function Index()
{

  const [students, setStudents] = useState([]);
  useEffect ( () =>{
    Student[constants.index](setStudents);
  },[])
  return(
    <Grid style={{marginTop:"20px"}}container spacing={2}>
      <Grid item xs={2}></Grid>
      
      <Grid item xs={8}>
        <StudentCRUD setStudents={setStudents} students={students}></StudentCRUD>
      </Grid>

      <Grid item xs={4}>
        <StoreButton></StoreButton>
      </Grid>

    </Grid>
  )
}
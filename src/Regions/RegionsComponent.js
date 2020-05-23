import React, { Component } from 'react';
import { withRouter } from "react-router-dom";
import { Table, Row, Col } from 'react-bootstrap';
import './RegionsComponent.css';



class Regions extends Component {
    constructor(props) {
        super(props);
        this.state = {
            actualTable: 0,
            Title: 'Europe Stats'
        };

        this.fillTable = this.fillTable.bind(this);
        this.europeData = this.europeData.bind(this);
        this.americaData = this.americaData.bind(this);
        this.asiaData = this.asiaData.bind(this);
        this.africaData = this.africaData.bind(this);
    }

    fillTable() {
        let tableData = undefined;
        if (this.state.actualTable === 0) {
            tableData = this.props.EuropeData;
        } else if (this.state.actualTable === 1) {
            tableData = this.props.AmericaData;
        } else if (this.state.actualTable === 2) {
            tableData = this.props.AsiaData;
        } else if (this.state.actualTable === 3) {
            tableData = this.props.AfricaData;
        }


        if (tableData) {
            return tableData.map((AllData, index) => {
                const { ActiveCases, Country, NewCases, NewDeaths, Population, TotalCases, TotalDeaths, TotalRecovered } = AllData //destructuring

                return (
                    <tr key={index} >
                        <td>{Country}</td>
                        <td>{Population}</td>
                        <td>{TotalCases}</td>
                        <td>{ActiveCases}</td>
                        <td>{NewCases}</td>
                        <td>{TotalRecovered}</td>
                        <td>{TotalDeaths}</td>
                        <td>{NewDeaths}</td>
                    </tr>
                )
            })
        }
    }

    europeData() {
        this.setState({
            actualTable: 0,
            Title: 'Europe Stats'
        })
    }

    americaData() {

        this.setState({
            actualTable: 1,
            Title: 'America Stats'
        })
    }

    asiaData() {
        this.setState({
            actualTable: 2,
            Title: 'Asia Stats'
        })
    }

    africaData() {
        this.setState({
            actualTable: 3,
            Title: 'Africa Stats'
        })
    }


    render() {
        return (
            <Row>
                <Col className='col-md-3 regionSection'>

                    <Row className="tableRegionTitle">
                        <Col>
                            Choose the Region
                        </Col>
                    </Row>
                    <Row>

                        <Table className="selctionRegionTable">

                            <tbody>
                                <tr onClick={this.europeData}>
                                    <td>Europe Stats</td>
                                </tr>
                                <tr onClick={this.americaData}>
                                    <td>America Stats</td>
                                </tr>
                                <tr onClick={this.asiaData}>
                                    <td>Asia Stats</td>
                                </tr>
                                <tr onClick={this.africaData}>
                                    <td>Africa Stats</td>
                                </tr>

                            </tbody>
                        </Table>
                    </Row>

                </Col>

                <Col className="tableEuropeanCol col-md-9">
                    <Row className="tableEuropeanTitle">
                        {this.state.Title}
                    </Row>
                    <Row>
                        <span className="europTable-wrap">
                            <Table responsive className="europeTableCountrys table-hover " >
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Population</th>
                                        <th>Total Cases</th>
                                        <th>Active Cases</th>
                                        <th>New Cases</th>
                                        <th>Total Recovered</th>
                                        <th>Total Deceased</th>
                                        <th>New Deceased</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {this.fillTable()}
                                </tbody>
                            </Table>
                        </span>
                    </Row>
                </Col>
            </Row>
        );
    }
}

export default withRouter(Regions);
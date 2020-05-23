import React, { Component } from 'react';
import { Row, Col } from 'react-bootstrap';
import './CasesComponent.css';


class CasesComponent extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    render() {
        return (
            <>
                <Col className="cases ">
                    <Row className="titleCases">
                        <Col>
                            Total Confirmed Cases
                        </Col>
                    </Row>
                    <Row className="numberConfirmedCases">
                        <Col>
                            {this.props.TotalConfirmedCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            Active Cases
                        </Col>
                    </Row>
                    <Row className="numberActiveCases">
                        <Col>
                            {this.props.TotalActiveCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageActiveCases}
                        </Col>
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            Recovered Cases
                        </Col>
                    </Row>
                    <Row className="recoveredActiveCases">
                        <Col>
                            {this.props.TotalRecoveredCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageRecoveredCases}
                        </Col>
                    </Row>
                </Col>
                <Col className="cases">
                    <Row className="titleCases">
                        <Col>
                            Total Deceased
                        </Col>
                    </Row>
                    <Row className="deathCases">
                        <Col>
                            {this.props.TotalDecesdCases}
                        </Col>
                    </Row>
                    <Row className="percentCases">
                        <Col>
                            {this.props.PercentageTotalDecesdCases}
                        </Col>
                    </Row>
                </Col>
            </>
        );
    }
}

export default CasesComponent;